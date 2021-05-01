<div>

    <style>
        nav svg {
            height: 20px;
        }

        .float {
            float: right;
        }

        .fondo-texto {
            background-color: #b0b0b0;
        }

        .card {
            background-color: #4db8cd1a;
        }

        span {
            color: blue;
        }
    </style>


    @include('livewire.create')
    @include('livewire.update')
    <section>
        <div class="container">
            <div class="row my-5">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>

                @endif

                <div class="card mb-3">
                    <div class="card-header fondo-texto text-white mt-3">
                        <h3>
                            Todos los estudiantes

                            <button type="button" class="btn btn-primary float" data-bs-toggle="modal" data-bs-target="#addStudentModal">

                                Agregar nuevo estudiante
                            </button>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table tabl-striped">
                            <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Email</th>
                                    <th>Telefono</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{$student->firstname}}</td>
                                    <td>{{$student->lastname}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>

                                        <button type="button" class="btn btn-sm text-white btn-info" data-bs-toggle="modal" data-bs-target="#updateStudentModal" wire:click.prevent="edit({{$student->id}})">Actualizar</button>
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteStudentModal">Eliminar</button>

                                        <!-- modal delete -->

                                        <div class="modal fade" id="deleteStudentModal" tabindex="-1" aria-labelledby="deleteStudentModal" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar registro</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4>Desea eliminar este registro?</h4>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancelar</button>
                                                        <button type="button" class="btn btn-danger" wire:click="destroy({{ $student->id }})">Eliminar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $students->links() }}
            </div>

        </div>

    </section>
    </nav>
</div>