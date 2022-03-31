<?php

class WishlistManager extends Model
{
    public function getAllWishlist()
    {
        $sql = "SELECT * FROM `wishlist`";
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

        $var = [];
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new Wishlist($data);

        }
        return $var;
        $req->closeCursor();
    }

    public function AddWishList($id_offer, $email)
    {


        
        $data = $req->fetch(PDO::FETCH_ASSOC);
        $id_student = $data['id_student'];
        $id_offer = $data['id_offer'];

        $req->closeCursor();

        $sql = "INSERT into wishlist (id_offer, id_student) values ('".$id_offer."', '".$id_student."')";
        $req = $this->getBdd()->prepare($sql);
        $req->execute();
    }

}