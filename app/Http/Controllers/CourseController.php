<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    // show all courses
    public function index()
    {

        // this will be later replaced with data coming from the database
        $courses = [
            [
                'id' => 1,
                'title' => 'Introduction to Web Development',
                'description' => 'A comprehensive introduction to web development technologies.',
                'duration' => 8,
                'level' => 'Beginner',
            ],
            [
                'id' => 2,
                'title' => 'Advanced JavaScript',
                'description' => 'In-depth coverage of advanced JavaScript concepts and frameworks.',
                'duration' => 10,
                'level' => 'Intermediate',
            ],
            [
                'id' => 3,
                'title' => 'PHP Development Basics',
                'description' => 'Fundamental concepts and practices in PHP development.',
                'duration' => 6,
                'level' => 'Beginner',
            ],
            [
                'id' => 4,
                'title' => 'ReactJS Mastery',
                'description' => 'Mastering ReactJS for building modern and interactive user interfaces.',
                'duration' => 12,
                'level' => 'Advanced',
            ],
            [
                'id' => 5,
                'title' => 'Database Design and SQL',
                'description' => 'Learn the essentials of database design and SQL programming.',
                'duration' => 8,
                'level' => 'Intermediate',
            ],
        ];




        return view('courses.index', [
            'courses' => $courses
        ]);
    }
}
