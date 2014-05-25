<?php
class AccessLogPDO
{
    private $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function count()
    {
        $sql ="SELECT count(*) FROM `access_log`";
        $sth = $this->pdo->prepare($sql);
        $sth->execute();
        $rows = $sth->fetch(PDO::FETCH_NUM);
        return $rows[0];
    }
}