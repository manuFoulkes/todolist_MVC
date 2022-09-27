<!-- Formulario de alta de tarea -->

<form action="add" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label for="">Titulo</label>
                <input name="title" type="text" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label for="">Prioridad</label>
                <select name="priority" id="" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="">Descripcion</label>
            <textarea name="description" id="" rows="3" class="form-control"></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>