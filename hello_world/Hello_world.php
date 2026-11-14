<?php
class Hello_world extends Trongate {

    private string $version = '1.0.0';

    public function index(): void {
        echo '<h1>Hello from the hello_world module!</h1>';
        echo '<p>Version ' . htmlspecialchars($this->version, ENT_QUOTES, 'UTF-8') . ' (free, MIT licensed)</p>';
    }
}
