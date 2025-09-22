<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
class InstagramController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
			try {
				$limit = '&limit=' . 4;
				// $url = "https://graph.instagram.com/me/media";
				$url = env('SERVICE_INSTAGRAM') . '/instagram';
				$fields = "?fields=id,caption,media_url,media_type";
				$access_token = \config('app.token_ig');

				// Caching data selama 120 menit (2 jam)
				$feeds = Cache::remember('instagram_feeds', 120, function () use ($url, $fields, $access_token, $limit) {
					$response = Http::withToken($access_token)->get($url . $fields . $limit);
					return json_decode($response->body(), true)['metadata'];
				});

				
				$feeds = array_slice($feeds, 0, 4);	
			} catch (\Throwable $th) {
				return $this->error($th->getMessage());
			}

			return view('web.instagram.index', ['feeds' => $feeds]);
		}
    }

    public function show(Request $request, $id)
	{
		if($request->ajax()) {
			try {
				// $url = "https://graph.instagram.com/{$id}";
				$url = env('SERVICE_INSTAGRAM') . "/instagram/{$id}";
				$fields = "?fields=id,caption,media_type,media_url,permalink,username";
				$access_token = \config('app.token_ig');

				$response = Http::withToken($access_token)->get($url . $fields);


				
				if ($response->successful()) {
					// $media = json_decode($response->body(), true);

					$responseData = json_decode($response->body(), true);
					if (!isset($responseData['metadata'])) {
						throw new \Exception('Data tidak ditemukan dalam respons API');
					}
					// Pastikan key `data` ada
					$media = $responseData['metadata'] ?? [];

					return view('web.instagram.show', ['media' => $media]);
				} else {
					throw new \Exception('API request failed.');
				}
			} catch (\Throwable $th) {
				return $this->error($th->getMessage());
			}
		}
	}
}