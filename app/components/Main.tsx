import InterventionStep from "./InterventionStep";
import { interventionData } from "../data/interventionData";
import MainTitleSection from "./MainTitleSection";
import MyLink from "./MyLink";
import Footer from "./Footer";

export default function Main() {
    return (
        <>
            <section className="w-dvw h-[calc(100vh-92px)]">
                <div className="pt-4 h-1/6 flex flex-col justify-center">
                    <h1 className="text-center italic text-xl font-bold font-fontHighlight">Artisan peintre en bâtiment</h1>
                    <div className="text-center text-5xl">
                        <p className="-z-10 relative inline-block">de confiance<span className="-z-10 block absolute h-3 w-[calc(100%+8px)] bg-highlight bottom-1 left-1/2 -translate-x-1/2"></span></p>
                    </div>
                </div>
                <div className="gap-2 p-4 h-5/6 grid-cols-3 grid-rows-2 grid">
                    <div className="bg-home-principal bg-cover bg-center col-span-3"></div>
                    <div className="bg-home-1 bg-cover bg-center"></div>
                    <div className="bg-home-2 bg-cover bg-center"></div>
                    <div className="bg-home-3 bg-cover bg-center"></div>
                </div>
            </section>
            <section className="w-dvw bg-highlightOpacity p-4">
                <div>
                    <h1 className="text-center italic text-xl font-bold font-fontHighlight">Découvrez</h1>
                    <div className="text-center text-5xl">
                        <p className="font-light inline-block">Nos <span className="z-20 relative after:absolute after:bottom-1 after:h-3 after:w-full after:bg-highlight after:left-0 after:-z-10">services</span> de peinture</p>
                    </div>
                </div>
                <p className="p-4 text-center">Découvrez nos services de peinture intérieure et extérieure, de la préparation des surfaces à la finition. Nous vous garantissons un travail de qualité et un rendu impeccable.</p>
                <div className="flex justify-center items-center">
                    <MyLink value={"Voir nos services"} url={"services"} />
                </div>
            </section>
            <section className="p-4 w-dvw">
                <MainTitleSection subtitle={"Détails d'une"} title={"Processus d'intervention"} />

                <div className="my-4">
                    {interventionData.map((intervention) => (
                        <InterventionStep key={intervention.number} number={intervention.number} title={intervention.title} description={intervention.description} />
                    ))}
                </div>
            </section>
            <div className="mb-4">
                <section className="p-4 bg-highlightOpacity relative mb-24">
                    <div>
                        <h1 className="text-center italic text-xl font-bold font-fontHighlight">Notre histoire</h1>
                        <div className="text-center text-5xl pb-24">
                            <p className="font-light inline-block"><span className="z-20 relative after:absolute after:bottom-1 after:h-3 after:w-full after:bg-highlight after:left-0 after:-z-10">&#192; propos de</span> Bati&apos;Peint</p>
                        </div>
                    </div>
                    <div className="bg-story w-9/12 aspect-video bg-cover bg-center absolute -bottom-20 left-1/2 -translate-x-1/2">
                    </div>
                </section>
                <div>
                    <p className="text-center p-4">Bati&apos;Peint est votre partenaire de confiance pour tous vos projets de peinture en bâtiment. Forte d&apos;une expérience solide, notre entreprise s&apos;engage à vous fournir des prestations de qualité, adaptées à vos besoins et à votre budget.</p>
                    <div className="flex justify-center">
                        <MyLink value="Découvrir notre entreprise" url="histoire" />
                    </div>
                </div>
            </div>
            <Footer />
        </>
    )
}