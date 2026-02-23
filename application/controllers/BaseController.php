<?php

/**
 * コントローラーの基底クラス
 * コントローラーはこのクラスを継承して作成する
 */
abstract class BaseController
{
    protected string $template = "";
    protected array $context = array();

    /**
     * コントローラーの処理を実行する
     * 
     * @return void
     */
    final public function run()
    {
        $this->before();
        $this->dispatch();
    }

    /**
     * コントローラーの処理を実行する前に呼び出されるメソッド
     *
     * @return void
     */
    protected function before() {}

    /**
     * HTTPリクエストのメソッドに応じて、get()またはpost()を呼び出すメソッド
     *
     * @return void
     */
    final protected function dispatch()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->post();
        } else {
            $this->get();
        }
    }

    /**
     * GETメソッドのときに呼び出されるメソッド
     *
     * @return void
     */
    protected function get() {}

    /**
     * POSTメソッドのときに呼び出されるメソッド
     *
     * @return void
     */
    protected function post() {}

    /**
     * ビューをレンダリングするメソッド
     *
     * @return void
     */
    final protected function render()
    {
        extract($this->context);
        include  Constants::VIEW_PATH . "/{$this->template}";
    }
}
