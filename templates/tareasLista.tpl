{include 'templates/header.tpl'}
{include 'templates/form.tpl'}

<ul class="list-group">
    {foreach $tareas as $tarea} 
        {if $tarea['completed'] == 1}
            <s><li class="list-group-item">' {$tarea['title']}: {$tarea['description']}</li></s>
            <a href="eliminarTarea/{$tarea['id']}"><button type="button" class="btn btn-danger">Eliminar</button></a>
         {else} 
            <li class="list-group-item">{$tarea['title']}: {$tarea['description']} </li><a href="finalizarTarea/{$tarea['id']}"><button type="button" class="btn btn-success">Finalizar</button></a>
            <a href="eliminarTarea/{$tarea['id']}"><button type="button" class="btn btn-danger">Eliminar</button></a>
        {/if}
    {/foreach}
</ul>

{include 'templates/footer.tpl'}

