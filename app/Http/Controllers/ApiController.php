<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Return Home Api (Features)
     */
    public function home()
    {

        $featuresList = [

            [
                'name' => 'Fully Responsive',
                'description' => 'It is a long established fact that a reader will be distracted by the when looking at its layout.'

            ],
            [
                'name' => 'Fresh Layouts',
                'description' => 'It is a long established fact that a reader will be distracted by the when looking at its layout.'

            ],
            [
                'name' => 'Minimalism Feast',
                'description' => 'It is a long established fact that a reader will be distracted by the when looking at its layout.'

            ],
            [
                'name' => 'Modern Workflow',
                'description' => 'It is a long established fact that a reader will be distracted by the when looking at its layout.'

            ],
            [
                'name' => 'Unique Features',
                'description' => 'It is a long established fact that a reader will be distracted by the when looking at its layout.'

            ],
            [
                'name' => 'Support 24/7',
                'description' => 'It is a long established fact that a reader will be distracted by the when looking at its layout.'

            ]

        ];

        $teamMembers=[
            [
                'name'=>'Pauline I. Bird',
                'avatar'=>'https://bootdey.com/img/Content/avatar/avatar7.png',
                'title'=>'Web developer',
            ],
            [
                'name'=>'Ralph L. Alva',
                'avatar'=>'https://bootdey.com/img/Content/avatar/avatar1.png',
                'title'=>'UI Developer',
            ],
            [
                'name'=>'John B. Roman',
                'avatar'=>'https://bootdey.com/img/Content/avatar/avatar6.png',
                'title'=>'Graphic Designer',
            ],
            [
                'name'=>'David O. Buckley',
                'avatar'=>'https://bootdey.com/img/Content/avatar/avatar2.png',
                'title'=>'Android Developer',
            ]
        ];
        return response()->json(['features'=>$featuresList, 'teamMembers'=>$teamMembers,'success'=>true]);
    }

    public function stories(){
        $user = [
            'name'=>'John Doe',
            'avatar'=>'https://bootdey.com/img/Content/avatar/avatar7.png',
        ];
        $stories = [
            [
                'name'=>'Pauline I. Bird',
                'avatar'=>'https://bootdey.com/img/Content/avatar/avatar8.png',
                'time' => 'Today, 12:33',
                'seen' => true
            ],
            [
                'name'=>'Ralph L. Alva',
                'avatar'=>'https://bootdey.com/img/Content/avatar/avatar1.png',
                'time' => 'Today, 12:33',
                'seen' => true
            ],
            [
                'name'=>'Katharina Nielsen',
                'avatar'=>'https://bootdey.com/img/Content/avatar/avatar3.png',
                'time' => 'Today, 12:33',
                'seen' => true
            ],
            [
                'name'=>'Cartmanson Lawson',
                'avatar'=>'https://bootdey.com/img/Content/avatar/avatar4.png',
                'time' => 'Today, 02:33',
                'seen' => false

            ],
            [
                'name'=>'John B. Roman',
                'avatar'=>'https://bootdey.com/img/Content/avatar/avatar6.png',
                'time' => 'Today, 02:33',
                'seen' => false

            ],
            [
                'name'=>'David O. Buckley',
                'avatar'=>'https://bootdey.com/img/Content/avatar/avatar2.png',
                'time' => 'Today, 02:33',
                'seen' => false
            ]
        ];

        return response()->json(['stories'=>$stories,'currentUser'=>$user]);
    }
}
