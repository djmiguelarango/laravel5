{!! Form::open(array('route' => ['admin.users.destroy', $user->id], 'method' => 'DELETE')) !!}
<button type="submit" onclick="return confirm('Desea eliminar este usuario')" class="btn btn-danger">Eliminar Usuario</button>
{!! Form::close() !!}