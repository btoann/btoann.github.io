<?php
 
    include_once '.system/lib/controller.php';

    function count_products($id)
    {
        $sql =
            'SELECT count(id) as count FROM products WHERE id_seller = '.$id;
        $dtb = new database();
        return $dtb->queryOne($sql);
    }

    function basic_products_show($id_user)
    {
        $sql =
            'SELECT pt.id, pt.name as product_name, ct.name as category_name,
                    categories_hashtag, pt.date, price as old_price, promotion, purchase
            FROM products pt INNER JOIN categories ct ON pt.id_category = ct.id
                            WHERE pt.id_seller = '.$id_user;
        $dtb = new database();
        return $dtb->query($sql);
    }

    function catHashtag_byProduct($categories_hashtag)
    {
        $sql = 'SELECT * FROM category_hashtag WHERE id IN ('.$categories_hashtag.')';
        $dtb = new database();
        return $dtb->query($sql);
    }
    
    function insert_product($name, $id_category, $categories_hashtag, $id_seller, $price, $promotion, $description)
    {
        $sql =
            'INSERT INTO products (name, id_category, categories_hashtag, id_seller, price, promotion, description)
            VALUES ("'.$name.'", "'.$id_category.'", "'.$categories_hashtag.'",
                    "'.$id_seller.'", "'.$price.'", "'.$promotion.'", "'.$description.'")';
        $dtb = new database();
        return $dtb->getExec($sql);
    }

    function insert_product_image($name, $id_product, $basename)
    {
        $sql =
            'INSERT INTO product_images (name, id_product, basename)
            VALUES ("'.$name.'", "'.$id_product.'", "'.$basename.'")';
        $dtb = new database();
        $dtb->execute($sql);
    }

    function delete_product($id)
    {
        $sql = 'DELETE FROM products WHERE id IN ('.$id.')';
        $dtb = new database();
        $dtb->execute($sql);
    }

?>