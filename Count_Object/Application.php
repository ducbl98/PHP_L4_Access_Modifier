<?php


class Application
{
    private string $name;
    public static int $count=0;

    /**
     * Application constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        self::$count++;
    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return 'Application Name '.$this->name.$this->arr;
    }

}
echo "Total objects count: ". Application::$count ."<br/>";
$app1 = new Application('App One');
echo "Total objects count: ". Application::$count ."<br/>";
$app2 = new Application('App Two');
echo "Total objects count: ". Application::$count ."<br/>";
echo $app1 .'<br/>';
echo $app2 .'<br/>';