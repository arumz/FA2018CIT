<?php
class Categories extends Model{

        public function getCategories() {

                $sql = 'SELECT name, categoryID FROM categories';

                $results = $this->db->execute($sql);

                while ($row = $results->fetchrow()) {
                    $categories[] = $row;
                }

        return $categories;

        }

}
