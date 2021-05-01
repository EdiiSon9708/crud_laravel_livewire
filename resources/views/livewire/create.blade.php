<!-- Modal -->

<div wire:ignore.selt class="modal fade" id="addStudentModal" tabindex="-1" aria- labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo estudiante</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="firtname">Nombres</label>
                        <input type="text" name="firstname" class="form-control" wire:model="firstname" />
                    </div>
                    <div class="form-group">
                        <label for="lastname">Apellidos</label>
                        <input type="text" name="lastname" class="form-control" wire:model="lastname" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" wire:model="email" />
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefono</label>
                        <input type="text" name="phone" class="form-control" wire:model="phone" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" wire:click.prevent="store()">Crear estudiante</button>
            </div>
        </div>
    </div>
</div>