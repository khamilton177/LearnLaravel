<div class="col-sm-3 offset-sm-1 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4>About</h4>
    <p>This is just a short demo to demonstrate my ability to quickly learn new technology and incorporate it into my work.</p>
  </div>
  <div class="sidebar-module">
    <h4>Lessons</h4>
    <ol class="list-unstyled">
      @foreach ($tasks as $task)
        <a class="{{($task->completed == 1) ? 'complete' : ''}}" href="/tasks/{{$task->id}}">
          <li>{{$task->body}}</li>
        </a>
      @endforeach
    </ol>
  </div>
  <div class="sidebar-module">
    <h4>Visit Me</h4>
    <ol class="list-unstyled">
      <li><a href="https://github.com/khamilton177" target="_blank">GitHub</a></li>
      <li><a href="http://www.kerryhamiltonmadeit.com" target="_blank">www.kerryhamiltonmadeit.com</a></li>
    </ol>
  </div>
</div><!-- /.blog-sidebar -->
