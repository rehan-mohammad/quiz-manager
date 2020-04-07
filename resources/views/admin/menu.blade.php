<li class="nav-item">

    <a class="nav-link {{ Request::is('quizzes*') ? 'active' : '' }}"
       href="{!! route('quizzes.index') !!}" role="button" aria-haspopup="true" aria-expanded="false">
        Quizzes
    </a>

</li>

<li class="nav-item">

    <a class="nav-link {{ Request::is('questions*') ? 'active' : '' }}"
       href="{!! route('questions.index') !!}" role="button" aria-haspopup="true" aria-expanded="false">
        Questions
    </a>

</li>

<li class="nav-item">

    <a class="nav-link {{ Request::is('submissions*') ? 'active' : '' }}"
       href="{!! route('submissions.index') !!}" role="button" aria-haspopup="true" aria-expanded="false">
        Submissions
    </a>

</li>

<li class="nav-item">

    <a class="nav-link {{ Request::is('users*') ? 'active' : '' }}"
       href="{!! route('users.index') !!}" role="button" aria-haspopup="true" aria-expanded="false">
        Users
    </a>

</li>