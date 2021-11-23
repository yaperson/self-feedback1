<?php

namespace App\Controller;

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\Label\Font\NotoSans;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/qrcode")
 */
class QRcodeController extends AbstractController
{
    /**
     * @Route("/", name="qrcode_generate")
     */
    public function index(): Response
    {
        $logoPath = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'ndlp.png';
        /*
        $builder = Builder::create()
        ->writer(new PngWriter())
        ->writerOptions([])
        ->data('Custom QR code contents')
        ->encoding(new Encoding('UTF-8'))
        ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
        ->size(300)
        ->margin(10)
        ->roundBlockSizeMode(new RoundBlockSizeModeMargin());
        // $result->logoPath($logoPath));
        $builder->labelText('This is the label')
        ->labelFont(new NotoSans(20))
        ->labelAlignment(new LabelAlignmentCenter());        
        $result = $builder->build();
        */

        $writer = new PngWriter();

        // Create QR code
        $qrCode = QrCode::create('Data')
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));
                
        // Create generic logo
        $logo = Logo::create($logoPath)
            ->setResizeToWidth(50);
        
        // Create generic label
        $label = Label::create('Label')
            ->setTextColor(new Color(255, 0, 0));
        
        $result = $writer->write($qrCode, $logo, $label);     
        


        // Embed image in HTTP response
        $response = new Response();
        $disposition = $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_INLINE, $result->);
        $response->headers->set('Content-Disposition', $disposition);
        $response->headers->set('Content-Type', 'image/png');
        $response->setContent($result);
        return $response;
    }
}
