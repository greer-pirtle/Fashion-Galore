<!DOCTYPE html>
<html>
<body>

<?php
echo "bottoms";
?>

</body>
</html>
<?php
class HelloWorld
{
    /**
     * @var PDO
     */
    private $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function bottoms($what = 'World')
    {
        $sql = "INSERT INTO bottoms VALUES (" . $this->pdo->quote($what) . ")";
        $this->pdo->query($sql);
        return "bottoms $what";
    }
    public function what()
    {
        $sql = "SELECT what FROM bottoms";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchColumn();
    }
}