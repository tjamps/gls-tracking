<?php

namespace Tjamps\GlsTracking\Soap\Request;

use DateTimeImmutable;

class GetTuListRequest extends AbstractRequest
{
    /** @var DateTimeImmutable|null  */
    private $from;
    /** @var DateTimeImmutable|null  */
    private $to;
    /** @var string  */
    private $customerRef;
    /** @var string  */
    private $refValue;
    /** @var string  */
    private $language;

    public function __construct(
        RequestCredentials $requestCredentials,
        string $customerRef = '',
        ?DateTimeImmutable $from = null,
        ?DateTimeImmutable $to = null,
        string $refValue = '',
        string $language = 'EN'
    ) {
        parent::__construct($requestCredentials);
        $this->from = $from;
        $this->to = $to;
        $this->customerRef = $customerRef;
        $this->refValue = $refValue;
        $this->language = $language;
    }

    public function toArray(): array
    {
        $array = [
            'RefValue' => $this->refValue,
            'CustomRef' => $this->customerRef,
            'Credentials' => [
                'UserName' => $this->credentials->getUsername(),
                'Password' => $this->credentials->getPassword(),
            ],
            'Parameters' => [
                'ParamCode' => 'LangCode',
                'ParamValue' => $this->language,
            ],
        ];

        if ($this->from) {
            $array['DateFrom'] = [
                'Year' => $this->from->format('Y'),
                'Month' => $this->from->format('m'),
                'Day' => $this->from->format('d'),
                'Hour' => $this->from->format('H'),
                'Minut' => $this->from->format('i'),
            ];
        }

        if ($this->to) {
            $array['DateTo'] = [
                'Year' => $this->to->format('Y'),
                'Month' => $this->to->format('m'),
                'Day' => $this->to->format('d'),
                'Hour' => $this->to->format('H'),
                'Minut' => $this->to->format('i'),
            ];
        }

        return $array;
    }

    public function getSoapFunctionName(): string
    {
        return 'GetTuList';
    }
}
