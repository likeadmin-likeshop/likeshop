<?php
namespace app\common\server\excel;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\IOFactory;

/**
 * @notes excel相关操作
 * composer require phpoffice/phpspreadsheet 或者 php composer.phar require phpoffice/phpspreadsheet
 * author lbzy
 * @datetime 2020-10-11 00:25:03
 * @class Excel
 * @package app\common\server\excel
 */
class Excel
{

	/**
     * 导出数据到excel
     * @param $data mixed 数据集|cursor对象 格式为select出来的格式 如: model('user')->select()
     * @param array $options 输出配置 array(
     *     [ 'title'=>'名字', 'field'=>'name' ],
     *     [ 'title'=>'邮箱', 'field'=>'email', 'callback'=>'aaaaa' ],
     * );
     * @param string $sheet_title  工作表标题
     * @param string $merge_title  第一行合并单元格里面的标题 留空则无标题
     * @param string $filename 导出的文件的名称,留空则默认为时间
     */
    static function out($data, array $options, string $sheet_title = '', string $merge_title = '', string $filename = '')
    {
        set_time_limit(0);
        $filename       = $filename ? : (date('Ymd.H.i.s'));
        $options        = array_values($options);
        
        // Create new Spreadsheet object
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setTitle($sheet_title ? : '未命名sheet');

        // 列
        $columns            = self::get2Cols();
        $options_length     = count($options) - 1;
        $row                = 1;
        
        // 合并第一行并设置标题和居中
        if ($merge_title) {
            $sheet->mergeCells('A1:' . $columns[$options_length] . '1')->setCellValue('A' . $row, $merge_title);
            $sheet->getStyle('A1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            $row++;
        }

        foreach($options as $ko => $option) {

            $sheet->getColumnDimension($columns[$ko])->setAutoSize(true);

            $column     = $columns[$ko];
            $cell_area  = $column . $row;

            // 设置第二行为备注名
            $cell_value  =  $option['title'] ?? '';

            $sheet->setCellValue($cell_area, $cell_value);
            $sheet->getColumnDimension($column)->setAutoSize(true);
        }
        
        $row++;

        // 循环插入数据
        $column_merges  = [];
        foreach ($data as $key => $dataInfo) {
            foreach ($options as $ko => $option) {
                
                $column     = $columns[$ko];
                $cell_area  = "{$column}{$row}";

                // 单元格置值
                $cell_value = self::out_cell_value($dataInfo, $option);

                // 设单元格置值
                if (isset($option['excel_data_type'])) {
                    $sheet->setCellValueExplicit($cell_area, $cell_value, $option['excel_data_type']);
                    // $sheet->setCellValueExplicit($cell_area, $cell_value, DataType::TYPE_STRING);
                } else {
                    $sheet->setCellValue($cell_area, $cell_value);
                }
                // 设置居中
                // $sheet->getStyle($cell_area)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
                
                // 是否列合并
                if (($option['column_merge'] ?? false)) {

                    // 
                    if (isset($column_merges[$ko])) {

                        $column_merge_length = count($column_merges[$ko]);

                        if ($cell_value != $column_merges[$ko][$column_merge_length - 1]) {
                            // 长度大于1则 合并并垂直居中
                            if ($column_merge_length > 1) {
                                $cell_merge_area = $column . ($row - $column_merge_length) . ':' . $column . ($row - 1);
                                
                                $sheet->mergeCells($cell_merge_area)->getStyle($cell_merge_area)->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);;
                            }
                            // 清除已合并的数据
                            unset($column_merges[$ko]);
                        }
                    }

                    // 添加数据存储
                    $column_merges[$ko][] = $cell_value;
                }

            }
            $row++;
        }
        // dump($col_widths);exit;
     
        // Redirect output to a client’s web browser (Xlsx)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        // header('Cache-Control: max-age=1');
     
        // If you're serving to IE over SSL, then the following may be needed
        // header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        // header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        // header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        // header('Pragma: public'); // HTTP/1.0
     
        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
    }


    static function get2Cols()
    {
        $a = $b = $res = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        
        foreach ($a as $key => $col1) {
            foreach ($b as $ko => $col2) {
                $res[] = $col1 . $col2;
            }
        }
        return $res;
    }

    static function out_cell_value($dataInfo, $option)
    {
        $cell_value = '';
        if (isset($option['field'])) {
            $cell_value = $dataInfo[$option['field']] ?? '';
        }
        
        // callback 自定义单元格置值 返回什么都按字符串处理
        $callback = $option['callback'] ?? null;
        is_callable($callback) && $cell_value = call_user_func_array($callback, [ $dataInfo, $option ]);

        return $cell_value;
    }

    static function load_file($filename)
    {
        $spreadsheet = IOFactory::load($filename);
        // $reader->setReadDataOnly(true);

        return $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
    }



}