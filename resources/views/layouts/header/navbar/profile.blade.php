<li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">John Doe</span><span class="avatar avatar-online"><img src="<?= url("resources/template/app-assets/images/portrait/small/avatar-s-19.png") ?>" alt="avatar"><i></i></span></a>
    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Editar Perfil</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>     
        <div class="dropdown-divider"></div><a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item" ><i class="ft-power"></i> Cerrar sesiòn</a></a>
 </div>
</li>

<!-- <a class="dropdown-item" href="app-email.html"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="user-cards.html"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="ft-message-square"></i> Chats</a> -->