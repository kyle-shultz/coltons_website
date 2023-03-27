<?php

class Widgets {

   public static function renderTable ($rows) {
      $columnNames = array_keys($rows[0]); 
      $html = "<table><thead><tr>";
      foreach ($columnNames as $name) {
        $html .= "<th>{$name}</th>";
      }
      $html .= "</tr></thead><tbody>";
      foreach ($rows as $row) {
        $html .= "<tr>";
        foreach($row as $columnName => $item) {
            if ($item === null){
                $html .= "<td>". "Empty". "</td>";
            } else {
                $html .= "<td>". htmlspecialchars($item) . "</td>";
            }
        }
      }
      $html .= "</table>";
      return $html;
   }
}