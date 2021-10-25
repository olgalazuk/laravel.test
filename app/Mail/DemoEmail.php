<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemoEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $demo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($demo)
    {
        $this->demo = $demo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('laravel@ololo.ru')
            ->view('mails.demo', [
                'demo' => $this->demo
            ])
            ->attach('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVBxYUFBQZGRUVGhoYHBocGSQkHBgaGB4cGhoeHB4dJS8lHCcsIxoeJjsmLS8/NTc1GiRIQDs0TS44NTQBDAwMBgYGEAYGEDEdFh0xMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMf/AABEIAOEA4QMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAABQYBAwQCB//EAEQQAAICAQMCBAQCBQgHCQAAAAECAAMRBBIhBTETIkFRBjJhcRSBQlKRobEVIyQ0Q5TR8BZicpLB0+MzU1RjdIKEk9L/xAAUAQEAAAAAAAAAAAAAAAAAAAAA/8QAFBEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8A+zREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQERMHtAzEjtV0im23fYgY4Azk9h9jiVn4r01Gnqq8Kje72qPDV2DOg5baM88hR/7oF3iU9bdE2qdfw15dSN4FVhKluRnHvjvNgTSYP8AQ9R6/wBjZAtkT55qen7rBfp1aylHZbaGyr0hcEhFPOTgttPJ35B4Alr6OaD0wPQu2qwb+cg4I7sGORwBxAmInznpWv066Kxr6LDX+KsWuxd7o++wpXtKk4GNigng+naTRo0nhZ/B6g89vCsz98EwLZEqRr0ezzaTUKD/AOTccY/2cziZan6zSqaS4UYIZ2rtAJONgw2Cu0gkkjHI5gXqJR9D0VD8S6kI7oKhWECk+QsqtuBcEEHawxz8ze4xP03JfQabgA4+ZCSCdrEBlGd20lcg5gTMSs6qzRVs1A2tZYyqagxLsx+XPJKjkZbsAeZF/EXSXHTVs3FHeypG/nCAleQgRGXsGIXJbd8x9OAF6iQtPQ6TV56uTwVNjsODkdz/AMJD9U6NSbvA0unp8XYXZm3YrB4Q4Hcsc45GNpMC5RKTounaJEFKaezUMh2NZjPmDEHe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');
    }
}