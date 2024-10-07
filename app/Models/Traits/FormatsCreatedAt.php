<?php
namespace App\Models\Traits;

trait FormatsCreatedAt
{
    /**
     * Format the created_at attribute.
     *
     * @return string
     */
    public function getFormattedCreatedAtAttribute(): string
    {
        return $this->created_at->format('d/m/Y H:i:s') . ' (' . $this->created_at->diffForHumans() . ')';
    }
}