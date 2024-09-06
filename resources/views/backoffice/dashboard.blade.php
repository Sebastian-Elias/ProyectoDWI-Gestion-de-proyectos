@extends('backoffice.layouts.app')

@section('title', 'Proyecto DWI | Dashboard')

@section('page-title', 'Dashboard | PROYECTOS')

@section('css')
    <!-- Custom CSS files here -->
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
    <style>
        .swal2-styled.swal2-confirm {
            margin-top: 5px !important;
            background-color: var(--success);
            width: 100%;
        }

        .swal2-styled.swal2-confirm:hover {
            background-color: var(--green);
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @if (count($proyectos) > 0)
                @foreach ($proyectos as $proyecto)
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-3">
                        <div class="card 
                @if ($proyecto->activo) card-success @else card-danger @endif
                card-outline"
                            style="height: 350px;">
                            <div class="card-header text-center">
                                <h5 style="margin-top: 13px">{{ $proyecto->nombre }}</h5>
                            </div>
                            <div class="card-body" style="overflow-y: auto;">
                                <div class="scroll-container">
                                    <div class="text-center">
                                        <img src="data:image/jpeg;base64,{{ base64_encode($proyecto->imagen) }}"
                                            alt="logo" style="width: auto; height: 75px; background-color: white;"><br>
                                        {{--<label class="bg-primary"
                                            style="margin-top: 5px; width: 40px; height: 40px; border-radius: 50%; padding-top: 8px; text-align: center">{{ count($proyecto->qrs) }}</label>--}}
                                    </div>
                                    <p class="card-text text-center scroll-container">{{ $proyecto->descripcion }}</p>
                                </div>
                            </div>
                            {{--
                                <div class="card-footer">
                                <button class="btn btn-primary w-100" onclick="datosModal({{ $proyecto->id }})"
                                    data-toggle="modal" 
                                    @if (isset($proyecto->qrs) && count($proyecto->qrs) > 0) 
                                        @else disabled 
                                    @endif
                                    data-target="#modal-xl">Ver Detalles</button>
                            </div>
                            --}}
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12">
                    No hay proyectos registrados
                </div>
            @endif


        </div>
    </div>
    <!-- modal -->
    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal-title">{titulo}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body">
                    <p>{contenido}</p>
                    

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

@section('scripts')
    <!-- Custom JS files here -->

   {{-- <!-- QR -->
    <script src="{{ asset('dist/js/md5.min.js') }}"></script>
    <script src="{{ asset('dist/js/qr.min.js') }}"></script>--}}
    <!-- SweetAlert2 -->
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <script>
        // Inicializa el arreglo que contendrá los proyectos
        const listaProyectos = [];

        @foreach ($proyectos as $proyecto)
            // Agrega cada proyecto al arreglo
            listaProyectos.push({
                id: '{{ $proyecto->id }}',
                nombre: '{{ $proyecto->nombre }}',
                activo: {{ $proyecto->activo == 1 ? 'true' : 'false' }},
            });
        @endforeach
    </script>

    <script>
        function datosModal(_id) {
            const titulo = document.getElementById('modal-title');
            const body = document.getElementById('modal-body');
            const imagen = document.getElementById('modal-image');
            const proyecto = listaProyectos.find(p => p.id == _id);

            titulo.innerText = `Detalle del Proyecto ${proyecto.nombre}`;
            body.innerHTML = ''; // Limpiar contenido anterior

            // Immagen del proyecto
            /*if (proyecto.imagen) {
                imagen.src = `data:image/jpeg;base64,${proyecto.imagen}`;  // Mostrar la imagen en base64
                imagen.style.display = 'block';  // Asegurarse de que la imagen esté visible
            } else {
                imagen.src = '';  // Limpiar el src si no hay imagen
                imagen.style.display = 'none';  // Ocultar la imagen si no existe
            }

                // Contenido del proyecto
            const descripcion = proyecto.descripcion || 'No disponible'; // Valor por defecto si no hay descripción
            body.innerHTML += `
                <p>${descripcion}</p>
                <!-- Aquí puedes agregar más información sobre el proyecto si es necesario -->
            `;*/
        }
    </script>
@endsection