
class IPAndPidIdentity implements IndentityInterface
{
    public function getId()
    {
        return $_SERVER['SERVER_ADDR'] . '_' . getmypid();
    }
}
