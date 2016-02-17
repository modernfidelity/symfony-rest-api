<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
          new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
          new Symfony\Bundle\SecurityBundle\SecurityBundle(),
          new Symfony\Bundle\TwigBundle\TwigBundle(),
          new Symfony\Bundle\MonologBundle\MonologBundle(),
          new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
          new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
          new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
          new AppBundle\AppBundle(),

            // CONTRIB
          new FOS\UserBundle\FOSUserBundle(),
          new FOS\RestBundle\FOSRestBundle(),
          new Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),
          new Nelmio\CorsBundle\NelmioCorsBundle(),
          new JMS\SerializerBundle\JMSSerializerBundle(),
          new Nelmio\ApiDocBundle\NelmioApiDocBundle(),
          new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
          new Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle(),

            // --- Sonata Admin (specific order)
          new Sonata\CoreBundle\SonataCoreBundle(),
          new Sonata\BlockBundle\SonataBlockBundle(),
          new Knp\Bundle\MenuBundle\KnpMenuBundle(),
          new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
          new Sonata\AdminBundle\SonataAdminBundle(),


            // CUSTOM
          new Mofi\TaskBundle\MofiTaskBundle(),


        );

        if (in_array($this->getEnvironment(), array('dev', 'test'), true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle(
            );
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle(
            );
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle(
            );
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(
          $this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml'
        );
    }
}
