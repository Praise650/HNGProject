<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            "slack_name" => $this->slack_name,
            "current_day" => $this->current_day,
            "utc_time" => $this->utc_time,
            "track" => $this->track,
            "github_file_url" => $this->github_file_url,
            "github_repo_url" => $this->github_repo_url,
            "status_code" => $this->status_code,
        ];
    }
}
