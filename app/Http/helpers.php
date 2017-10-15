<?php
use Carbon\Carbon;

function showCity($post)
{

    if ($post->malls->count() === 0) {
        return '<span class="text-danger">Online</span>';
    }

    if ($post->malls->count() > 1) {
        return '<a href="' . route('promo', $post->slug) . '">' . $post->malls->count() . ' tempat</a>';
    } else {
        $strings = [];
        foreach ($post->malls as $mall) {
            $strings[] = '<a href="' . route('mall', $mall->id) . '">' . $mall->title . '</a>';
        }
        return implode(" ", $strings);
    }

}

function showTimeLeft($post)
{
    $start = explode('-', $post->start_at);
    $end = explode('-', $post->end_at);
    $dtstart = Carbon::createFromDate($start[0], $start[1], $start[2]);
    $dtend = Carbon::createFromDate($end[0], $end[1], $end[2]);

    return $dtstart->diffInDays($dtend);
}

function showPrice($post)
{
    $prices = explode(":", $post->price);
    if (count($prices) > 1) {
        return '<span class="appendix">' . $prices[0] . '</span>' . $prices[1];
    } else {
        return $prices[0];
    }
}
