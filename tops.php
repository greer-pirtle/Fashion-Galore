<!DOCTYPE html>
<html>
<body>

<?php
echo "tops";
?>

</body>
</html>
<?php
class 
{
    /**
     * @var PDO
     */
    private $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function tops($what = 'World')
    {
        $sql = "INSERT INTO tops VALUES (" . $this->pdo->quote($what) . ")";
        $this->pdo->query($sql);
        return "tops $what";
    }
    public function what()
    {
        $sql = "SELECT what FROM tops";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchColumn();
    }
}