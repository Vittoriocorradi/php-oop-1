<?php
// Database
require_once __DIR__ . '/models/db.php';

// Header
include_once __DIR__ . '/partials/header.php';
?>

<!-- Body della pagina -->

<div id="app" class="p-5">
    <div class="row">
        <div class="col-12 mx-auto mb-5">
            <h1 class="text-center">Movies List</h1>
        </div>
        <div class="col-5 mx-auto">
            <ul class="list-group">
                <li v-for="movie in movies" class="list-group-item d-flex justify-content-between">
                    <div> {{ movie.title }} </div>
                    <div>
                        <span v-for="genre in movie.genres" class="ms-1"> {{ genre }} </span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


<!-- Axios -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- VueJS -->
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<!-- My JS -->
<script src="main.js"></script>
<!-- /Body della pagina -->

<?php
// Footer
include_once __DIR__ . '/partials/footer.php';
?>