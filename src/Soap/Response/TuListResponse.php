<?php

namespace Tjamps\GlsTracking\Soap\Response;

use DateTimeImmutable;
use Doctrine\Common\Collections\ArrayCollection;

class TuListResponse extends AbstractResponse
{
    /** @var array|ArrayCollection  */
    private $tuList;

    public function __construct(ExitCode $exitCode, array $tuList = [])
    {
        parent::__construct($exitCode);
        $this->tuList = new ArrayCollection();

        foreach ($tuList as $tuIem) {
            $this->tuList[] = new TuItem(
                $tuIem->RefNo,
                new DateTimeImmutable(
                    sprintf(
                        '%s/%s/%s %s:%s',
                        $tuIem->InitialDateTime->Year,
                        $tuIem->InitialDateTime->Month,
                        $tuIem->InitialDateTime->Day,
                        $tuIem->InitialDateTime->Hour,
                        $tuIem->InitialDateTime->Minut
                    )
                ),
                $tuIem->EvtCodeNo,
                $tuIem->EvtReasonNo,
                $tuIem->CountryCode,
                $tuIem->ZipCode,
                $tuIem->City,
                $tuIem->ConsigneeName,
                $tuIem->ReferenceKey,
                $tuIem->CurrentStatus,
            );
        }
    }

    public function getTuList(): ArrayCollection
    {
        return $this->tuList;
    }
}
