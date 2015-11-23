<?php

namespace Spark\Project\Domain;

use Spark\Adr\DomainInterface;
use Spark\Adr\PayloadInterface;

class StaticPage implements DomainInterface
{
    /**
     * @var PayloadInterface
     */
    private $payload;

    /**
     * @param PayloadInterface $payload
     */
    public function __construct(PayloadInterface $payload)
    {
        $this->payload = $payload;
    }

    /**
     * @inheritDoc
     */
    public function __invoke(array $input)
    {
        $name = 'world';

        if (!empty($input['name'])) {
            $name = $input['name'];
        }

		// Check static page or partial exists
//		if ($this->engine->exists('static/' . $name)) {

//		} else {
//			header("HTTP/1.0 404 Not Found");
//			echo "PHP continues.\n";
//			echo "Not after a die, however.\n";
//			die();
			
//		}
		
        return $this->payload
            ->withStatus(PayloadInterface::OK)
            ->withOutput([
				'template' => 'templates::layout',
                'name' => $name,
            ]);


    }
}
