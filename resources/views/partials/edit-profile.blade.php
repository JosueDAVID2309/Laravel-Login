<div id="modal" class="modal">
    <div class="modal-content">

        <div class="modal-header">
            <h3>Editar Perfil</h3>
            <span class="close" onclick="closeModal()">&times;</span>
        </div>

        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="name" value="{{ $user->name }}" required>
            </div>

            <div class="form-group">
                <label>Apellido</label>
                <input type="text" name="lastname" value="{{ $user->lastname }}" required>
            </div>

            <div class="form-group">
                <label>Usuario</label>
                <input type="text" name="user" value="{{ $user->user }}" required>
            </div>

            <!-- Email (bloqueado) -->
            <div class="form-group">
                <label>Email</label>
                <input type="email" value="{{ $user->email }}" disabled>
            </div>

            <div class="modal-actions">
                <button type="button" class="btn secondary" onclick="closeModal()">
                    Cancelar
                </button>

                <button type="submit" class="btn primary">
                    Guardar Cambios
                </button>
            </div>

        </form>

    </div>
</div>