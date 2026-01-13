
routes:
   Route::middleware(['auth', 'admin])->group(function() {}); 

controller:
    $this->middleware('auth');

建立middleware檔案->bootstrap/app.php註冊alias -> 在routes套用
