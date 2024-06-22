<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResearchNoob</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('./css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('./css/dashboard.css')}}">
</head>
<body>

    <x-Nav></x-Nav>

    <div class="container grid my-5">
    <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4">
        <div class="col">
            <button type="button" class="startProject p-5" data-bs-toggle="modal" data-bs-target="#startProjectModal">+</button>
        </div>
        @foreach($projects as $project)
            <div class="col">
                <a href="{{ route('projects.show', $project->id) }}">
                    <div class="card p-1">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                        </div>
                        <div class="card-footer">
                            <p class="card-text">Created at: {{ $project->created_at->format('Y-m-d H:i:s') }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

        <div class="modal fade" id="startProjectModal" tabindex="-1" aria-labelledby="startProjectModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="startProjectModalLabel">Start New Project</h5>
                    </div>
                    <div class="modal-body">
                        <form id="startProjectForm" method="POST" action="{{ route('projects.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="projectTitle" class="form-label">Project Title</label>
                                <input type="text" class="form-control" id="projectTitle" name="title" required>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="startProjectButton">Start Project</button>
                        </form>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
