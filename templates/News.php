<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 3/2/2017
 * Time: 10:10 PM
 */

class news
{
    /**
     * Pass in an array of stories to render
     *
     * @param $data
     */
    public static function stories($data)
    {
        foreach ( $data as $story ) {
            Self::story($story);
        }
    }
    /**
     * Render a single story
     *
     * @param $data
     */
    public static function story($data)
    {

        $title = $data['title'];
        $content = $data['content'];
        $startdate = $data{'startDate'};
       // $pic = $_SERVER['DOCUMENT_ROOT'] . '/pictures/' . $data['image'];
        $image = $data{'image'};

        //if (is_file($pic)) {
           // $image = '<img src = "/pictures/' . $data['image'];
        //} else {
         //   $image = '';
        //}

        // $author = $data['firstname'] . ' ' . $data['lastname'];

        echo <<<story
        <div class="top10">
            <h3>$title</h3>
            <h5> Posted on $startdate </h5>
            <img src="/pictures/$image" height="250" width= "500">
            <p>$content</p>
        </div>        
story;
    }
    /**
     * Create the header to a table using the column names as the
     * titles of the column
     * @param $data
     * @return string
     */
    public static function buildTableHeader($data)
    {
        // Start building the table
        $table = '<table class="table table-hover">';
        // Create the table header row
        $header = '<tr>';
        foreach ( $data[ 0 ] as $key => $cell ) {
            $header .= '<th>' . $key . '</th>';
        }
        $header .= '<th>action</th>';
        $header .= '</tr>';
        // Add the header to the table
        $table .= $header;
        return $table;
    }
    /**
     * Close out the table
     * @return string
     */
    public static function closeTable()
    {
        // Close out the table
        $table = '</table>';
        return $table;
    }
    /**
     * Loop through a data row and create the table cells
     * @param $row
     * @return string
     */
    public static function buildTableRow($row)
    {
        // Loop through each cell to build a row of data
        $rowHTML = '<tr>';
        // Loop through each cell and create the cells
        foreach ( $row as $key => $cell ) {
            if($key == 'id') {$id=$cell;}
            $rowHTML .= '<td>' . $cell . '</td>';
        }

        $rowHTML .= '<td><a href="updatePosts.php?id='.$id.'">Update </a> | <a href="viewPosts.php?id='.$id.'"> View </a> | <a href="delete.php?id='.$id.'">Delete</a></td>';
        $rowHTML .= '</tr>';
        return $rowHTML;
    }
    public static function updateTableRow($row)
    {
        // Loop through each cell to build a row of data
        $rowHTML = '<tr>';
        // Loop through each cell and create the cells
        foreach ( $row as $key => $cell ) {
            if($key == 'id') {$id=$cell;}
            $rowHTML .= '<td>' . $cell . '</td>';
        }

        $rowHTML .= '<td><a href="updateUsers.php?id='.$id.'">Update </a> | <a href="deleteUser.php?id='.$id.'">Delete</a></td>';
        $rowHTML .= '</tr>';
        return $rowHTML;
    }
}