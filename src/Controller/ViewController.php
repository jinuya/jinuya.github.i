<?php

namespace src\Controller;

use src\App\DB;

class ViewController 
{
    // 메인
    public function index()
    {
        $datas['title'] = "인삼골주간보호센터";
        view("index", $datas);
    }

    // 온라인 집들이
    public function page6()
    {
        $datas['title'] = "인삼골주간보호센터소개 - 인사말 - 인삼골주간보호센터";
        view("page6", $datas);
    }

    public function houses_list() {
        $datas = DB::fetchAll("SELECT *, ifnull((SELECT truncate(sum(g.grade) / count(*), 0) FROM grades g WHERE g.house_idx = h.idx), 0) grade, h.idx hidx FROM houses h JOIN users u ON h.user_idx = u.idx");
        foreach ($datas as $key => $house) {
            $house->check = DB::fetch("SELECT * FROM grades WHERE house_idx = ? AND user_idx = ?", array($house->hidx, user()->idx));
        }

        returnJSON(["list" => $datas, "result" => true]);
    }
    
    // 스토어
    public function page37()
    {
         $datas['title'] = "서비스안내 - 요양서비스 - 안심골주간보호센터";
         view("page37", $datas);
    }

    public function page39()
    {
         $datas['title'] = "이용방법 - 이용방법 - 안심골주간보호센터";
         view("page39", $datas);
    }

    public function page40()
    {
         $datas['title'] = "이용방법 - 비용안내 - 안심골주간보호센터";
         view("page40", $datas);
    }
    
    public function page42()
    {
         $datas['title'] = "주간보호센터소식 - 자료실 - 안심골주간보호센터";
         view("page42", $datas);
    }    public function test()
    {
         $datas['title'] = "주간보호센터소식 - 자료실 - 안심골주간보호센터";
         view("test", $datas);
    }

    public function page45()
    {
         $datas['title'] = "사랑나눔 - 자원봉사 - 안심골주간보호센터";
         view("page45", $datas);
    }
    
    public function page46()
    {
         $datas['title'] = "사랑나눔 - 후원안내 - 안심골주간보호센터";
         view("page46", $datas);
    }

    public function page8()
    {
         $datas['title'] = "증평군 증평읍 광장로 30 홍익프라자 3층";
         view("page8", $datas);
    }

    public function page38()
    {
         $datas['title'] = "시설안내 > 시설안내 | 인삼골주간보호센터";
         view("page38", $datas);
    }

    public function page43()
    {
         $datas['title'] = "공지사항 1 페이지 | 서울요양원";
         view("page43", $datas);
    }
    
    // 전문가
    public function specia()
    {
        $datas['title'] = "전문가";
        $datas['users'] = DB::fetchAll("SELECT *, ifnull((SELECT truncate(sum(r.grade) / count(*), 0) FROM reviews r WHERE r.specia_idx = u.idx), 0) grade FROM users u WHERE u.specia = true");
        $datas['constList'] = DB::fetchAll("SELECT r.*, s.img img, u.id user_id, u.name user_name, s.id specia_id, s.name specia_name FROM reviews r JOIN users u JOIN users s  ON r.user_idx = u.idx AND r.specia_idx = s.idx");
        view("specia", $datas);
    }

    // 시공 견적
    public function quote()
    {
        $datas['title'] = "시공 견적";
        $datas['req_quotes'] = DB::fetchAll("SELECT *, (SELECT count(*) FROM resp_quotes rp WHERE rp.req_idx = rq.idx) cnt, rq.idx rqidx FROM req_quotes rq JOIN users u ON rq.user_idx = u.idx");
        foreach ($datas['req_quotes'] as $key => $quote) {
            $quote->check = DB::fetch("SELECT * FROM resp_quotes WHERE req_idx = ? AND user_idx = ?", array($quote->rqidx, user()->idx));
        }
        $datas['resp_quotes'] = DB::fetchAll("SELECT *, rq.idx rqidx, rp.status rpstatus FROM resp_quotes rp JOIN req_quotes rq JOIN users u ON rp.req_idx = rq.idx AND rq.user_idx = u.idx");
        view("quote", $datas);
    }

    public function resp_quote($idx = 0)
    {
        $datas['title'] = "시공 견적";
        $datas['quotes'] = DB::fetchAll("SELECT *, rq.status rqstatus, rp.idx resp_idx FROM req_quotes rq JOIN resp_quotes rp JOIN users u ON rq.idx = rp.req_idx AND u.idx = rp.user_idx WHERE rq.idx = ?", array($idx));
        view('resp_quote', $datas);
    }

    // 캡차 이미지
    public function captcha()
    {
        $str = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
        $code = '';
        for ($i = 0; $i < 5; $i++) {
            $code .= $str[rand(0, strlen($str) - 1)];
        }

        session()->set("captcha", $code);

        $im = imagecreatetruecolor(100, 80);
        $bg = imagecolorallocate($im, 22, 86, 165); // background color blue
        $fg = imagecolorallocate($im, 255, 255, 255); // text color white
        imagefill($im, 0, 0, $bg);
        imagestring($im, 5, 28, 30, $code, $fg);
        header('Content-type: image/png');
        imagepng($im);
        imagedestroy($im);
    }

    // 초기 데이터 삽입
    public static function init()
    {
        if(DB::fetch("show table status like 'users'")->Auto_increment == 1){
            DB::execute("INSERT INTO users (id, password, name, img) VALUES (?, ?, ?, ?)", array("specialist1", "1234", "전문가1", "specialist1.jpg"));
            DB::execute("INSERT INTO users (id, password, name, img) VALUES (?, ?, ?, ?)", array("specialist2", "1234", "전문가2", "specialist2.jpg"));
            DB::execute("INSERT INTO users (id, password, name, img) VALUES (?, ?, ?, ?)", array("specialist3", "1234", "전문가3", "specialist3.jpg"));
            DB::execute("INSERT INTO users (id, password, name, img) VALUES (?, ?, ?, ?)", array("specialist4", "1234", "전문가4", "specialist4.jpg"));
        }
    }
}

ViewController::init();