<?php

namespace App\plugins\note_table\viewmodels;

use SPT\Web\ViewModel;
use SPT\Web\Gui\Form;

class TableWidget extends ViewModel
{
    public static function register()
    {
        return [
            'widget' => [
                'preview',
            ]
        ];
    }
    
    public function preview($layoutData, $viewData)
    {
        $id = isset($viewData['currentId']) ? $viewData['currentId'] : 0;
        $data = $this->NoteHtmlModel->getDetail($id);
        
        return [
            'data' => $data,
        ];
        
    }
}
