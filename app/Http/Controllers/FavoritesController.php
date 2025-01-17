<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * ポストをお気に入りするアクション。
     *
     * @param  $micropostId  指定ポストのid
     * @return \Illuminate\Http\Response
     */
    public function store(string $micropostId)
    {
        // 認証済みユーザー（閲覧者）が、 idのポストをお気に入りする
        \Auth::user()->favorite(intval($micropostId));
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * ポストをお気に入り解除するアクション。
     *
     * @param  $micropostId  指定ポストのid
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $micropostId)
    {
        // 認証済みユーザー（閲覧者）が、 idのポストをお気に入り解除する
        \Auth::user()->unfavorite(intval($micropostId));
        // 前のURLへリダイレクトさせる
        return back();
    }
}
