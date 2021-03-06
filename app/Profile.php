<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $guarded =[];

	public function profileImage(){
			$imagePath = ( $this->image )? $this->image : 'profile/noimage.png';
			return '/storage/'.$imagePath;
	}

	public function getUserProfile(){
		$profileUrl = 'profile/' . $this->user_id;
		return $profileUrl;
	}

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function followers(){
		return $this->belongsToMany( User::class );

    }
}
