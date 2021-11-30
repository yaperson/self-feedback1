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

        $writer = new PngWriter();

        // Create QR code
        $qrCode = QrCode::create('https://github.com/ndlaprovidence/self-feedback1/projects/1')
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(500)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));
                
        // Create generic logo
        $logo = Logo::create($logoPath)
            ->setResizeToWidth(50);
        
        // Create generic label
        $label = Label::create('Scannez pour accéder au questionnaire !')
            ->setTextColor(new Color(92, 119, 209));
        
        $result = $writer->write($qrCode, $logo, $label);     

        $dataUri = $result->getDataUri();

        return $this->render('qrcode/index.html.twig', [
            'data_url' => $dataUri,
            'title' => "QR code",
        ]);


    }
    // public function scanToken(tokenRepository $userRepository): Response
    // {
    //     return $this->render('user/index.html.twig', [
    //         'users' => $userRepository->findAll(),
    //     ]);
    // }
}
