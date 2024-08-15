<?php


namespace app\common\command;


use app\admin\logic\MyLogic;
use think\console\Command;
use think\console\Input;
use think\console\input\Argument;
use think\console\Output;
use think\Db;

class Password extends Command
{
    /**
     * @notes
     * @author 令狐冲
     * @date 2021/11/24 10:56
     */
    protected function configure()
    {
        $this->setName('password')
            ->addArgument('password', Argument::OPTIONAL, "your name")
            ->setDescription('修改超级管理密码');
    }

    /**
     * @notes
     * @param \think\console\Input $input
     * @param \think\console\Output $output
     * @return int|void|null
     * @author 令狐冲
     * @date 2021/11/22 17:15
     */
    protected function execute(Input $input, Output $output)
    {
        $password = trim($input->getArgument('password'));
        if (empty($password)) {
            $output->error('请输入密码');
            return;
        }

        $adminInfo = Db::name('admin')
            ->where('root', 1)
            ->find();
        MyLogic::updatePassword($password, $adminInfo['id']);
        $output->info('超级管理修改密码成功！');
        $output->info('账号：' . $adminInfo['account']);
        $output->info('密码：' . $password);
    }


}