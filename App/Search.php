<?php

namespace App;

class Search
{
    private $_term;

    public function __construct($term)
    {
        $this->_term = $term;
    }

    /**
     * Function returns search result set
     * It combines all results from all tables
     *
     * It uses search term as a parameter used to instantiate an object
     *
     * @return array()
     */
    public function returnResults()
    {
        $connection = new Connection();

        $criteria = $connection->cleanValue($this->_term);

        $searchQuery = "SELECT title1
                        FROM articles1
                        WHERE title1
                        LIKE '%" . $criteria . "%'

                        UNION

                        SELECT content1
                        FROM articles1
                        WHERE content1
                        LIKE '%" . $criteria . "%'

                        UNION

                        SELECT title2
                        FROM articles2
                        WHERE title2
                        LIKE '%" . $criteria . "%'

                        UNION

                        SELECT content2
                        FROM articles2
                        WHERE content2
                        LIKE '%" . $criteria . "%'";

        $res = $connection->executeQuery($searchQuery);

        $connection->closeConnection();

        return $res;
    }
}
