<?php

namespace App\Controller;

use App\Helpers\Composite\ConcreteComposite\Fieldset;
use App\Helpers\Composite\ConcreteComposite\Form;
use App\Helpers\Composite\FormElement;
use App\Helpers\Composite\Input;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompositeTestController
{

    private function getProductForm(): FormElement
    {
        $form = new Form('product', "Add product", "/product/add");
        $form->add(new Input('name', "Name", 'text'));
        $form->add(new Input('description', "Description", 'text'));

        $picture = new Fieldset('photo', "Product photo");
        $picture->add(new Input('caption', "Caption", 'text'));
        $picture->add(new Input('image', "Image", 'file'));

        return $form;
    }

    private function loadProductData(FormElement $form)
    {
        $data = [
            'name' => 'Apple MacBook',
            'description' => 'A decent laptop',
            'photo' => [
                'caption' => 'Front photo.',
                'image' => 'photo1.png',
            ]
        ];

        $form->setData($data);
    }
    #[Route('/app/composite_test', name: 'composite')]
    public function compositeTest(): Response
    {
        $form = $this->getProductForm();
        $this->loadProductData($form);

        return new Response(
            $form->render()
        );
    }
}