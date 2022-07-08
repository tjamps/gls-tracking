<?php

namespace Tjamps\GlsTracking\Rest\Response;

use Doctrine\Common\Collections\ArrayCollection;

class TuDetailResponse
{
    /** @var array|ArrayCollection */
    private $parcels;

    public function __construct(array $array)
    {
        $this->parcels = new ArrayCollection();

        foreach ($array['parcels'] as $parcel) {
            $tuParcel = new TuParcel($parcel['status'], $parcel['trackid'], $parcel['events']);
            $this->parcels[] = $tuParcel;
        }
    }

    public function getParcels(): ArrayCollection
    {
        return $this->parcels;
    }
}
