type InterventionStepProps = {
    number: string,
    title: string,
    description: string
}

export default function InterventionStep({ number, title, description }: InterventionStepProps) {
    return (
        <div>
            <h2 className="text-4xl text-highlight">{number}</h2>
            <div className="my-2">
                <h5 className="font-bold text-xl">{title}</h5>
                <p>{description}</p>
            </div>
            <span className="my-3 block h-1 bg-highlightVariant w-10"></span>
        </div>
    )
}