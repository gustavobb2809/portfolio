<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ControllerContact;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $user = DB::select('SELECT * FROM users INNER JOIN profile ON profile.id = users.profile_fk');
    $skills = DB::select('SELECT skills.description, my_skills.nivel FROM users INNER JOIN my_skills ON my_skills.users_fk = users.id INNER JOIN skills ON skills.id = my_skills.skills_fk WHERE users.id = ?', [$user[0]->id]);
    $socials = DB::select('SELECT my_socials.link, socials.icon FROM socials INNER JOIN my_socials ON my_socials.socials_fk = socials.id INNER JOIN users ON users.id = my_socials.users_fk WHERE users.id = ?', [$user[0]->id]);
    $projects = DB::select('SELECT projects.id, projects.title, projects.url, category.description AS category, projects.date, photos.photo FROM projects INNER JOIN category ON category.id = projects.category_fk INNER JOIN photos ON photos.projects_fk = projects.id WHERE photos.type = "intro" AND projects.status = "finalizado"');
    $total_clients = DB::select('SELECT COUNT(id) AS quant FROM clients');
    $total_projects = DB::select('SELECT COUNT(id) AS quant FROM projects WHERE status = "finalizado"');

    $data = array('user' => $user, 'skills' => $skills, 'socials' => $socials, 'projects' => $projects, 'total_clients' => $total_clients, 'total_projects' => $total_projects);

    return view('home', $data);
});

Route::get('/project/{id}', function ($id) {
    $project = DB::select('SELECT projects.description, projects.date, projects.title, category.description AS category, clients.name, projects.url  FROM projects INNER JOIN category ON category.id = projects.category_fk INNER JOIN clients ON clients.id = projects.clients_fk WHERE projects.id = ?', [$id]);
    $photos = DB::select('SELECT photo FROM photos WHERE TYPE = "slide" AND projects_fk = ?', [$id]);

    $data = array('project' => $project, 'photos' => $photos);

    return view('project', $data);
});

Route::post('/api/new_contact', [ControllerContact::class, 'save']);
