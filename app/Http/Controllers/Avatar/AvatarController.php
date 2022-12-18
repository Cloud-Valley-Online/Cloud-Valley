<?php

namespace App\Http\Controllers\Avatar;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\UserItem;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\AvatarItem;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $items = $this->getItems(Auth::id());

        // dd(file_get_contents(storage_path('app/public/images/base.png')));
        // $avatar_frame = imagecreatetruecolor(120, 150);
        // $avatar_frame = $this->gd_transparecy($avatar_frame);

        // imagecopy($avatar_frame, imagecreatefrompng(storage_path('app/public/images/base.png')), 0, 0, 0, 0, 120, 150);
        // imagecopy($avatar_frame, imagecreatefrompng(storage_path('app/public/images/eyes.png')), 0, 0, 0, 0, 120, 150);

        // header('Content-type: image/png');
    	// imagepng($avatar_frame);
    	// imagedestroy($avatar_frame);

        //   //Create image instances
        //  $dest = imagecreatefrompng(storage_path('app/public/images/base.png'));
        //  $src = imagecreatefrompng(storage_path('app/public/images/eyes.png'));

        //  // Copy and merge
        //  $newimg = imagecopymerge($dest, $src, 10, 10, 0, 0, 100, 47, 75);

        //  // Output and free from memory
        //  header('Content-Type: image/png');
        //  imagepng($dest);

        //  imagedestroy($dest);
        //  imagedestroy($src);

        return view('avatar.avatar_inventory', ['items' => $items]);
    }

    public function customize($user_id, $item_id = null)
    {
        //get all user items that are equipped
        $equipped_items = $this->getItems(Auth::id(), true);

        $avatar_frame = imagecreatetruecolor(120, 150);
        $avatar_frame = $this->gd_transparecy($avatar_frame);

        //get the avatar_image and its parts
        foreach($equipped_items as $avatar_item)
        {
            //get parts
            foreach($avatar_item->avataritem->parts as $item)
            {
                imagecopy($avatar_frame, imagecreatefrompng(storage_path($item->image_path)), 0, 0, 0, 0, 120, 150);
            }
        }

        //build avatar
        header('Content-type: image/png');
    	imagepng($avatar_frame);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     /**
     * $image_obj = array()
     */
    private function gd_transparecy($image_obj)
	{
		$transcol   = imagecolorallocatealpha($image_obj, 255, 0, 255, 127);
		$trans      = imagecolortransparent($image_obj, $transcol);
		imagefill($image_obj, 0, 0, $transcol);
		imagesavealpha($image_obj, true);
		imagealphablending($image_obj, true);

		return $image_obj;
	}

    /**
     * Get a Collection of the users item
     * @param integer $user_id
     * @return Illuminate\Database\Eloquent\Collection
     */
    private function getItems($user_id, $equipped = false)
    {
        if($equipped)

        {
            $items = UserItem::where('user_id', $user_id)->where('equipped', 1)->get();

            return $items;
        }
        else

        {
            $items = UserItem::where('user_id', $user_id)->get();

            return $items;
        }

    }
}
