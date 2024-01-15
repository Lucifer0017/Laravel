<?php
namespace App\Models;

class Listings{
    public static function all(){
        return  [
            [
            'id' => 1,
            'title' => 'Listing One',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minus distinctio accusantium unde dicta dolorum quos. Assumenda, rerum iusto itaque ex sequi perspiciatis numquam, incidunt quo quaerat quos nesciunt illum adipisci laboriosam ipsa magni.'
        ],
        [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minus distinctio accusantium unde dicta dolorum quos. Assumenda, rerum iusto itaque ex sequi perspiciatis numquam, incidunt quo quaerat quos nesciunt illum adipisci laboriosam ipsa magni.'
        ]
        ];
    }

    public static function find($id){
        $listings = self::all();

        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
}

?>