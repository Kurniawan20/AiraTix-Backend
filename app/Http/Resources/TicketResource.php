<?php

namespace HiEvents\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title ?? '',
            'description' => $this->description ?? '',
            'sale_start_date' => $this->sale_start_date,
            'sale_end_date' => $this->sale_end_date,
            'max_per_order' => $this->max_per_order,
            'min_per_order' => $this->min_per_order,
            'sales_volume' => $this->sales_volume,
            'sales_tax_volume' => $this->sales_tax_volume,
            'hide_before_sale_start_date' => $this->hide_before_sale_start_date,
            'hide_after_sale_end_date' => $this->hide_after_sale_end_date,
            'hide_when_sold_out' => $this->hide_when_sold_out,
            'show_quantity_remaining' => $this->show_quantity_remaining,
            'is_hidden_without_promo_code' => $this->is_hidden_without_promo_code,
            'order' => $this->order,
            'type' => $this->type,
            'is_hidden' => $this->is_hidden,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
