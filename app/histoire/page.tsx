import Footer from "../components/Footer";
import Header from "../components/Header";
import MainTitleSection from "../components/MainTitleSection";

export default function Story() {
    return (
        <>
            <Header />
            <section className="mt-4 p-4">
                <MainTitleSection subtitle={'Présentation de'} title={"Bati'Peint"} />
                <div className="bg-story-story w-9/10 aspect-square bg-cover bg-center my-4"></div>
                <div>
                    <div className="mb-4">
                        <h2 className="font-black text-xl">Une Histoire de Savoir-Faire</h2>
                        <p>Batipeint est le fruit de la vision de Ludovic, un entrepreneur déterminé à offrir des services de peinture de haute qualité à des prix compétitifs. Fort d&apos;une riche expérience dans le domaine de la peinture et de la décoration, il a su développer des compétences pointues, garantissant ainsi un travail soigné et précis.</p>
                    </div>
                    <div className="mb-4">
                        <h2 className="font-black text-xl">L&apos;Engagement envers les Clients</h2>
                        <p>Pour Batipeint, chaque client compte. La philosophie de l&apos;entreprise repose sur l&apos;idée que chaque projet est unique et mérite une attention particulière. C&apos;est pourquoi des prestations sur mesure sont proposées, tenant compte des souhaits, des goûts et du budget de chacun. Que ce soit pour une simple retouche ou un projet plus ambitieux, Batipeint s&apos;engage à offrir des solutions adaptées et de qualité.</p>
                    </div>
                    <div>
                        <h2 className="font-black text-xl">Satisfaction Client</h2>
                        <p>La satisfaction des clients est une priorité absolue. Batipeint met un point d’honneur à écouter les attentes de chacun et à les accompagner tout au long du processus, depuis la conception jusqu&apos;à la réalisation. L&apos;objectif est de transformer chaque projet en une expérience agréable et réussie, où les clients se sentent valorisés et pris en charge.</p>
                    </div>
                </div>
            </section>
            <div className="mb-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.5935604892743!2d1.3096581766997415!3d48.904082571338435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e14dd022b15555%3A0x50f24e00f3728afb!2s12%20bis%20Chem.%20de%20la%20Futelaye%2C%2027220%20Mousseaux-Neuville!5e0!3m2!1sfr!2sfr!4v1730414727215!5m2!1sfr!2sfr" className="w-3/4 mx-auto"></iframe>
            </div>
            <Footer />
        </>
    )
}